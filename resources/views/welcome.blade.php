
@extends('layouts.app')

@section('content')
	<div style="text-align: center;">
        <div class="">

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Готово!</strong> {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
{{--                        <span aria-hidden="true">&times;</span>--}}
                    </button>
                </div>
            @endif

        </div>
        <header class="major">
        <h2><a href="#">HR Hack от ITRUN<br>
            </a>
        </h2>
            <h3>Разработка цифрового решения по трудоустройству</h3>
            <h4>25, 26, 27 Мая 2023 года. <br>
                г. ХУДЖАНД</h4>
        </header>
        <p>Школа программа ITRUN совместно с ГУ Бизнес Инкубатор  при партнёрстве с ПРООН Таджикистан в рамках проекта «Ускорение восстановления экономики после COVID-19 за счет улучшения средств к существованию, возможностей трудоустройства и регионального сотрудничества в Ферганской долине» (RTC) проводит Хакатон среди молодёжи по Разработке цифрового решения по трудоустройству</p>
	<div style="display: flex; justify-content: center;">
		<ul class="actions">
			<li>
				<a href="{{ route('participant.create1') }}">
					<input type="submit" value="Я один!" class="primary" >
				</a>
			<li>
				<a href="{{ route('participant.create2') }}">
					<input type="submit" value="У нас команда!" class="primary" >
				</a>
			</li>
		</ul>
	</div>
        <div class="main">
            <footer id="footer">
                <section>

                        <div class="fields">
                            <div class="field">
                                Кто может участвовать:  молодые люди в возрасте 15-30 лет, интересующиеся технологиями, специалисты в области ИТ, молодые ученые, практикующие программисты, веб-дизайнеры, графические дизайнеры, специалисты по маркетингу, SMM-специалисты, особенно студенты профильных университетских курсов (например, ИТ, веб-разработки, бизнес и экономика, маркетинг) и стартаперы
                            </div>

                        </div>
                </section>
                <section class="split contact">
                    <section class="alt">
                        <h3>Дата</h3>
                        <p>Дни проведения Хакатона: 27,28,29 Мая 2023 года</p>
                    </section>
                    <section>
                        <h3>Место проведения</h3>
                        <p> г.Гулистон, зона отдыха Национального Банка Таджикистана</p>
                    </section>
                </section>
            </footer>


                <!-- Post -->
                <section class="post">
            <h2>FAQ</h2>
            <div class="row">
                <div class="col-12 col-12-small">
                    <ul>
                        <li>Могу участвовать своей командой? <b> Да. Участвовать можно как индивидуально, так и командой</b></li>
                        <li>Сколько человек может быть в команде? <b> В команде допускается от 2 до 3 человек.</b></li>
                        <li>Где будет проходить хакатон? <b> Хакатон будет проводиться в конференц зале гостиницы Сугдиён</b></li>
                        <li>Нужно ли внести оплату для участия? <b> Нет. Все расходы оплачиваются со стороны
                                IT-RUN и ГУ «БИТ» </b></li>
                        <li>По какой тематике будет задание на хакатон? <b> Задание будет оглашено в день старта Хакатона. </b></li>
                        <li>Наградят ли победителей? <b> Победители получат призы за первое, второе и третье место</b></li>
                        <li>Что в дальнейшем ждёт разработанное решение команды? <b> Сотрудничество с IT-RUN, ГУ «БИТ и UNDP»</b></li>


                    </ul>
                    <h2>Команды-победители получат ценные призы: 1-е место приз на сумму  10 000 TJS, 2-е место 8000 TJS и 3 место -6000 TJS.</h2>
                </div>
            </div>
                </section>

        </div>
	</div>
@endsection
