@if (isset($modul))
    @switch($modul)
          @case('base')
               @include('maincontent')
          @break
          @case('login')
              @include('login')
          @break
          @case('reg')
             @include('registration')
          @break
          @case('succes')
             @include('succes')
          @break
          @case('succesReg')
             @include('succesRegistration')
          @break
          @case('admin')
             @include('adminbase')
          @break
          @case('galery')
             @include('gallery')
          @break
          @case('enciklopedia')
            @include('enciklopedia')
          @break
          @case('event')
            @include('event')
          @break
          @case('contact')
            @include('contact')
          @break
          @case('error')
             @include('error')
          @break
          @default
            <!-- Default content if $variable doesn't match any case -->
            <p>{{ __('messages.modulError') }}</p>
    @endswitch
@else

@endif