

<div class="column">
    <div class="card">
        <img src="{{asset('storage/foto')}}/{{$avatar}}" alt="Kartu Identitas" style="width:100%">
      <div class="container">
        <h3>{{$title}}</h3>
        <p class="title"><strong>{{$name}}</strong></p>
        <p>{{ "+62 " . substr($telp, 1, 20) }} <i class="fa fa-phone"></i></p>
        <p><i class="fa fa-envelope"></i> {{$email}}</p>
        <p>
            {{$button}}
        </p>
      </div>
    </div>
</div>
