<div class="bg-white p-2">
    @if (Session()->has('extensao'))
        <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
            role="alert">
            <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium"> {{ Session('extensao') }}
                </span>
            </div>
        </div>
    @endif
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
    @if (Session()->has('sucesso'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
            role="alert">
            <span class="font-medium"> {{ Session('sucesso') }}
        </div>
    @endif
    <h1 class="uppercase font-bold py-3">Ficheiros</h1>
    <form>
        <div class="mb-6">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Ficheiro
            </label>
            <input wire:model='nome' name="file"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="user_avatar_help" id="user_avatar" type="file">


        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Categoria</label>

            <select wire:model='categoria' required name="" id=""
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Selecione uma categoria</option>
                <option value="Internet das coisas">Internet das coisas</option>
                <option value="Redes">Redes</option>
                <option value="Web">Web</option>
                <option value="Mobile">Mobile</option>
                <option value="Desktop">Desktop</option>
                <option value="Inteligência Artificial">Inteligência Artificial</option>
                <option value="Outros">Outros</option>
            </select>
        </div>

        <button wire:click.prevent='upload()' type="submit"
            class="mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Publicar</button>
    </form>


    <h1 class="my-3 uppercase font-bold">Todos Ficheiros de Monografias</h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Icone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categoria
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Operação</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($uploads as $upload)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            <img class="w-6" src="{{ asset('/pdf.jpg') }}" alt="sem imagem" srcset="">
                        </th>
                        <td class="px-6 py-4">
                            {{$upload->nome}}
                        </td>
                        <td class="px-6 py-4">
                            {{$upload->categoria}}
                        </td>

                        <td class="px-6 py-4 text-right">
                            <a href="{{route('download',$upload->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Abrir</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a wire:click='deleteFile({{$upload->id}})' href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Apagar</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</div>
