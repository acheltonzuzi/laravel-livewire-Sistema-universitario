<div class="bg-white p-2">
    <h1 class="py-3">ADICIONAR TEMAS</h1>

    <form wire:submit.prevent='cadastrar()'>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tema</label>
            <input wire:model='tema' type="text" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="escreva seu tema" required="">
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

        <button  type="submit"
            class="mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Publicar</button>
    </form>
    <hr>

    <h1 class="my-3 font-bold">TEMAS QUE PUBLICASTE</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Tema
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categoria
                    </th>
                    
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($temas as $tema)
                    
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{$tema->tema}}
                    </th>
                    <td class="px-6 py-4">
                       {{$tema->categoria}}
                    </td>
                    
                    
                    <td class="px-6 py-4 text-right">
                        <a wire:click.prevent='apagar({{$tema->id}})' href="#" class="font-medium bg-red-600 text-white py-2 px-4 rounded-lg dark:text-red-500 hover:underline">Apagar</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>


</div>