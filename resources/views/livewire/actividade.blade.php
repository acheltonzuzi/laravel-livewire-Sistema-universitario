<div class="bg-white p-2 ">
    <h1 class="uppercase font-bold py-3">Actividades</h1>
    
    <form wire:submit.prevent='add()'>
        <div class="mb-6">
            <label for="estudante" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome do Estudante</label>
            <input wire:model='nomeEstudante' type="text" id="estudante"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required="">
        </div>
        <div class="mb-6">
            <label for="tema" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Tema a defender</label>
            <input wire:model='tema' type="text" id="tema"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required="">
        </div>
        <div class="mb-6">
            <label for="data" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Data da Defesa</label>
            <input wire:model='data' type="date" id="data"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required="">
        </div>
        <div class="mb-6">
            <label for="Sala" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Sala da Defesa</label>
            <input wire:model='sala' type="text" id="Sala"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required="">
        </div>
        <div class="mb-6">
            <label for="hora" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Hora da Defesa</label>
            <input wire:model='hora' type="time" id="hora"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required="">
        </div>
        
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Publicar</button>

       
    </form>
    @if (Session()->has('apagar'))
        <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
            role="alert">
            <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium"> {{ Session('apagar') }}
                </span>
            </div>
        </div>
    @endif
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Estudante
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tema
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sala 
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hora
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Data
                    </th>
                    
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Delete</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($actividade as $act)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $act->nome_estudante}}
                        </th>
                        <td class="px-6 py-4">
                            {{ $act->tema }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $act->sala }}

                        </td>
                        <td class="px-6 py-4">
                            {{ $act->hora }}

                        </td>
                        <td class="px-6 py-4">
                            {{ $act->data }}

                        </td>
                        
                       
                        <td class="px-6 py-4 text-right">
                            <a wire:click.prevent="apagar({{$act->id}})" href="#"
                                class="font-medium bg-red-600 text-white py-2 px-4 rounded-lg dark:text-red-500 hover:underline">Apagar</a>
                        </td>
                    </tr>
                    
                @endforeach


            </tbody>
        </table>
        
    </div>

</div>
