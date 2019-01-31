@extends('user.layouts.main')

@extends('user.admin.menu')

@section('title', 'Setting ')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-light"  style="color:#7386D5;margin: 1px 0 0 30px">
         <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Setting</li>
      </ol>
     </nav>
@endsection
@section('content')
    
    <div class="box">
        <table>

            @foreach ($settings as $setting)
                {{-- <form action="{{route('admin.settingUpdate')}}" method="POST"> --}}
                    <tr>
                        <th style="margin-right:20px; display:block">{{$setting->name}}</th>
                        <td>
                            <div class="switchToggle">  
                                <input type="checkbox" data-id="{{$setting->id}}" class="toggleBtn" value="{{$setting->is_active}}" id="switch{{$setting->id}}" {{$setting->is_active == 1 ? 'checked' : ''}}>
                                <label for="switch{{$setting->id}}">Toggle</label>
                            </div>
                        </td>
                    </tr>
                {{-- </form> --}}
            @endforeach
        </table>
        

     

@endsection

@push('scripts')
    <script>   
        $(document).ready(function(){
            $('.toggleBtn').change(function(){
                var id = $(this).data('id');
                
                var value = $(this).is(':checked') ? 1: 0;

                $.ajax({
                    headers:{
                    'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                    },
                    url: "{{route('admin.settingUpdate')}}",
                    type: "post",
                    data: {id:id, is_active:value},
                    success: function(){                     
                        /* Add success modal*/
                        Swal.fire({
                            type: 'success',
                            title: 'Berhasil diupdate!',
                        });
                    }
                 });
                    
            
            });
        });
    </script>
@endpush
