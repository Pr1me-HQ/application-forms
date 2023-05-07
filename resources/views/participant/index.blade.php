@extends('layouts.app')
 
@section('content')

@foreach ($objects as $object)
    <div>
        <h3>{{ $object->f_name}} {{ $object->l_name }}</h3>
        <div>
           <b>Телефон</b> - {{ $object->p_number }}
        </div>
        <div>
           <b>E-mail</b> - {{ $object->email }}
        </div>
        <div>
            <b>В какой компании работаете?</b> - {{ $object->job }}
        </div>
        <div>
            <b>Какая у вас роль в компании?</b> - {{ $object->profession }}
        </div>
        <div>
            <b>Как бы вы себя охарактеризовали для Хакатона?</b> - {{ $object->who_f_hackathon }}
        </div>
        <div>
            <b>Опыт в разработке ит-продуктов?</b> - {{ $object->it_experience }}
        </div>
        <div>
            <b>Опыт участия в хакатонах?</b> - {{ $object->hackathon_experience }}
        </div>
        <div>
           <b>Названия команди</b> - {{ $object->team_name }}
        </div>
        <div>
            <b>Расскажите немного о себе</b>  - {{ $object->about }}
        </div>
        <div>
            <b>Есть ли у вас идея для хакатона?</b> - {{ $object->idea }}
        </div>
    </div>
    <hr>
@endforeach
@endsection