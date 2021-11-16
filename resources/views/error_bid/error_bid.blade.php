<form class="form col-12 col-md-10">
    <p>nma balo</p>
    <div class="form__group">
        @if($errors->has('name'))
            <span style="color: red!important;font-size: 14px;" class="text-danger error-text" id="name_error">{{$errors->first('name')}}</span>
        @endif
        <input placeholder="Имя" type="text"  name="name" id="name" class="form__input">

    </div>
    <div class="form__group">
        @if($errors->has('number'))
            <span style="color: red!important;font-size: 14px;" class="text-danger error-text">{{$errors->first('number')}}</span>
        @endif
        <input placeholder="+998 (XX) XXX XX XX" type="text" name="number" id="number" class="form__input phone-number-input">

        <button data-url="{{route('bid')}}" class="form__button bid col-12"
                type="button"> Заказать сайт</button>


    </div>
</form>
