@seoTitle(__('меню'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Меню блюд') }}
            </h2>
            <a href="{{ route('menus.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новое Блюдо') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white rounded-md max-w-4xl mx-auto">
            <x-splade-table :for="$menus" >
                @cell('image', $menu)
                <img src="{{ Storage::url($menu->image) }}" class="" alt="">
                @endcell
                @cell('action', $menu)
                <div class="flex gap-2">
                    <Link href="{{ route('menus.destroy', $menu->id) }}" class="p-2 rounded-md bg-gray-100" confirm="Внимание!" confirm-text="Вы действительно хотите удалить Блюдо?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{__('Удалить')}}</Link>
                    <Link href="{{ route('menus.edit', $menu->id) }}" class="p-2 rounded-md bg-gray-100">{{__('Редактировать')}}</Link>
                </div>

                @endcell
            </x-splade-table>
        </div>

</x-app-layout>
