@seoTitle(__('Новое блюдо'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новое блюдо') }}
            </h2>
            <a href="{{ route('menus.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку заявок') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('menus.store')}}">
                <x-splade-input name="name" label="{{__('Название блюда')}}" placeholder="{{__('Пюре')}}"/>
                <x-splade-textarea name="description" label="{{__('Описание Блюда')}}" placeholder="{{__('Описание')}}"/>
                <x-splade-input name="cost" label="{{__('Цена блюда(₽)')}}" placeholder="{{__('750₽')}}"/>
                <x-splade-input name="time" label="{{__('Время готовки(мин.)')}}" placeholder="{{__('25 мин.')}}"/>
                <x-splade-file name="image" label="{{__('Картинка Блюда')}}"/>
                <x-splade-select name="cheffood" label="{{__('Блюдо от шефа')}}">
                    <option value="0">{{__('Еда')}}</option>
                    <option value="1">{{__('Еда от шефа')}}</option>
                </x-splade-select>
                <x-splade-select name="isActive" label="{{__('Статус категории')}}">
                    <option value="0">{{__('Не активен')}}</option>
                    <option value="1">{{__('Активен')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
