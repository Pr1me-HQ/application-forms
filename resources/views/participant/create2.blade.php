@extends('layouts.app')

@section('content')

<h2>Регистрация на Хакатон (если у вас команда)</h2>

<form method="post" action="{{ route('participant.store') }}">
	@csrf
	<div class="row gtr-uniform">
		<div class="col-6 col-12-xsmall">
			<input type="text" name="f_name" value="{{old('f_name')}}" placeholder="Имя" />
			@if($errors->has('f_name')) <p
				style="color: red;">{{ $errors->first('f_name') }}</p>
			@endif
		</div>
		<div class="col-6 col-12-xsmall">
			<input type="text" name="l_name"  value="{{ old('l_name') }}" placeholder="Фамилия" />
			@if($errors->has('l_name')) <p
				style="color: red;">{{ $errors->first('l_name') }}</p>
			@endif
		</div>
		<div class="col-6 col-12-xsmall">
			<input type="text" name="p_number"  value="{{ old('p_number') }}" placeholder="Номер телефона" />
			@if($errors->has('p_number')) <p
				style="color: red;">{{ $errors->first('p_number') }}</p>
			@endif
		</div>
		<div class="col-6 col-12-xsmall">
			<input type="email" name="email"  value="{{ old('email') }}" placeholder="Э-почта" />
			@if($errors->has('email')) <p
				style="color: red;">{{ $errors->first('email') }}</p>
			@endif
		</div>
		<div class="col-6 col-12-xsmall">
			<input type="text" name="job" value="{{ old('job') }}" placeholder="Место работы или учебы" />
			@if($errors->has('job')) <p
				style="color: red;">{{ $errors->first('job') }}</p>
			@endif
		</div>
		<div class="col-6 col-12-xsmall">
			<input type="text" name="profession" value="{{ old('profession') }}" placeholder="Должность или статус в ораганизации" />
			@if($errors->has('profession')) <p
				style="color: red;">{{ $errors->first('profession') }}</p>
			@endif
		</div>
		<div class="col-12 col-12-xsmall">
			<input type="text" name="team_name" value="{{ old('team_name') }}" placeholder="Название команды" />
			@if($errors->has('team_name')) <p
				style="color: red;">{{ $errors->first('team_name') }}</p>
			@endif
		</div>
		<!-- Break -->
		<div class="col-12">
		<div><b>Как бы вы себя охарактеризовали для Хакатона?</b></div>
			<select name="who_f_hackathon">
				<option value="{{ old('who_f_hackathon') }}">- Выберите вариант из списка -</option>
				<option value="Разработчик">Разработчик</option>
				<option value="Дизайнер UX/UI">Дизайнер UX/UI</option>
				<option value="Продукт-менеджер">Продукт-менеджер</option>
				<option value="Маркетолог">Маркетолог</option>
				<option value="Аналитик">Аналитик</option>
				<option value="ИТ-архитектор">ИТ-архитектор</option>
				<option value="Преподователь">Преподователь</option>
				<option value="Инженер">Инженер</option>
				<option value="Иное">Иное</option>
			</select>
			@if($errors->has('who_f_hackathon')) <p
				style="color: red;">{{ $errors->first('who_f_hackathon') }}</p>
			@endif
		</div>
		<div class="col-12">
		<div><b>Опыт в разработке ит-продуктов?</b></div>
			<select name="it_experience" id="demo-category123">
				<option value="">- Выберите вариант из списка -</option>
				<option value="Нет опыта">Нет опыта</option>
				<option value="Менее 1 года">Менее 1 года</option>
				<option value="От 1 до 3 лет">От 1 до 3 лет</option>
				<option value="Более 3 лет">Более 3 лет</option>
			</select>
			@if($errors->has('it_experience')) <p
				style="color: red;">{{ $errors->first('it_experience') }}</p>
			@endif
		</div>
		<div class="col-12">
		<div><b>Опыт участия в хакатонах?</b></div>
			<select name="hackathon_experience">
				<option value="">- Выберите вариант из списка -</option>
				<option value="Нет опыта">Нет опыта</option>
				<option value="Менее 1 года">Менее 1 года</option>
				<option value="От 1 до 3 лет">От 1 до 3 лет</option>
				<option value="Более 3 лет">Более 3 лет</option>
			</select>
			@if($errors->has('hackathon_experience')) <p
				style="color: red;">{{ $errors->first('hackathon_experience') }}</p>
			@endif
		</div>
		<div class="col-12">
			<textarea name="idea"placeholder="Есть ли у вас идея для хакатона? (не обязательно, но это может вас выделить при отборе)" rows="6"></textarea>
			@if($errors->has('idea')) <p
				style="color: red;">{{ $errors->first('idea') }}</p>
			@endif
		</div>
		<div class="col-12">
			<textarea name="about" placeholder="Расскажите немного о себе (не обязательно, но это может вас выделить при отборе)" rows="6"></textarea>
			@if($errors->has('about')) <p
				style="color: red;">{{ $errors->first('about') }}</p>
			@endif
		</div>
		<!-- Break -->
		<div class="col-12">
			<ul class="actions">
				<li><input type="submit" value="Зарегистрироваться" class="primary" /></li>
				<li><input type="reset" value="Сброс" /></li>
			</ul>
		</div>
	</div>
</form>

@endsection
