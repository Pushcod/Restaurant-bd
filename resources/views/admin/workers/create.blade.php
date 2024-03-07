@seoTitle(__('Новый чел'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Профи') }}
            </h2>
            <a href="{{ route('workers.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку заявок') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('workers.store')}}">
                <x-splade-input name="name" label="{{__('Имя')}}" placeholder="{{__('ФИО')}}"/>
                <x-splade-input name="passport" label="{{__('Паспорт работника')}}" placeholder="{{__('875367372')}}"/>
                <x-splade-input name="number" label="{{__('Номер телефона')}}" placeholder="{{__('+7 987 654 32 10')}}"/>
                <x-splade-input name="email" label="{{__('e-mail адрес')}}" placeholder="{{__('worker@gmail.com')}}"/>
                <x-splade-input name="home" label="{{__('Место жительство')}}" placeholder="{{__('ул. Сизам')}}"/>
                <x-splade-input name="exp" label="{{__('Опыт работы')}}" placeholder="{{__('7 лет')}}"/>
                <x-splade-input name="worktime" label="{{__('Время работы')}}" placeholder="{{__('8:00 - 20:00')}}"/>
                <x-splade-input name="jobtitle" label="{{__('Должность')}}" placeholder="{{__('Официант/Повар')}}"/>
                <x-splade-input name="solary" label="{{__('зарплата(₽)')}}" placeholder="{{__('19 000 ₽')}}"/>
                <x-splade-select name="isActive" label="{{__('Статус категории')}}">
                    <option value="0">{{__('Не активен')}}</option>
                    <option value="1">{{__('Активен')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
