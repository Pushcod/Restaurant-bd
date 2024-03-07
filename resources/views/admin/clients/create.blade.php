@seoTitle(__('Новый чел'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Профи') }}
            </h2>
            <a href="{{ route('clients.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку заявок') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('clients.store')}}">
                <x-splade-input name="name" label="{{__('Заголовок баннера')}}" placeholder="{{__('Заголовок')}}"/>
                <x-splade-input name="number_client" label="{{__('Описание баннера')}}" placeholder="{{__('Описание')}}"/>
                <x-splade-input name="number_phone" label="{{__('Описание баннера')}}" placeholder="{{__('Описание')}}"/>
                <x-splade-input name="number_table" label="{{__('Описание баннера')}}" placeholder="{{__('Описание')}}"/>
                <x-splade-input name="email" label="{{__('Описание баннера')}}" placeholder="{{__('Описание')}}"/>
                <x-splade-input name="count_client" label="{{__('Описание баннера')}}" placeholder="{{__('Описание')}}"/>
                <x-splade-input date name="date_up" label="{{__('Описание баннера')}}" placeholder="{{__('Описание')}}"/>
                <x-splade-select name="isActive" label="{{__('Статус категории')}}">
                    <option value="0">{{__('Не активен')}}</option>
                    <option value="1">{{__('Активен')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
