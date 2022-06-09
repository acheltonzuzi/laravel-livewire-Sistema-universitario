<div class="bg-white p-2">
    @if (Session()->has('usuario'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
            role="alert">
            <span class="font-medium uppercase">{{ Session('usuario') }}</span>
        </div>
    @endif
    <h1 class="uppercase flex flex-column">Crud de usuario</h1>
    <button class="my-3 bg-blue-600 text-white py-2  px-5 rounded-lg shadow-md hover:shadow-lg hover:bg-blue-500"
        wire:click="showModal">Cadastrar</button>

    <x-jet-dialog-modal wire:model="ids">
        <x-slot name="title">
            <h1>Adicionar Novo Usuário</h1>
        </x-slot>
        <x-slot name="content">

            <form>
                <div class="mb-6">
                    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome
                    </label>
                    <input wire:model='nome' name="nome" type="text" id="nome"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="escreva seu nome" required="">
                    @error('nome')
                        <b class="text-red-600">{{ $message }}</b>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Email</label>
                    <input wire:model="email" name="email" type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="exemplo@gmail.com" required="">
                    @error('email')
                        <b class="text-red-600">{{ $message }}</b>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Telefone</label>
                    <input wire:model="telefone" name="telefone" type="tel" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="insere seu número de telefone" required="">
                    @error('telefone')
                        <b class="text-red-600">{{ $message }}</b>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Perfil</label>
                    <select wire:model="perfil" name="perfil" id=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="Professor">Selecione o seu perfil</option>
                        <option value="Professor">Professor</option>
                        <option value="Estudante">Estudante</option>
                        <option value="Admin">Admin</option>
                    </select>
                    @error('perfil')
                        <b class="text-red-600">{{ $message }}</b>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Senha</label>
                    <input wire:model="senha" name="senha" type="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required="">
                    @error('senha')
                        <b class="text-red-600">{{ $message }}</b>
                    @enderror
                </div>

                @if ($edit)
                    <button wire:click.prevent='atualizar()' type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
                    <button wire:click.prevent='cancelModal1()' type="submit"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:rired-800">Cancelar</button>
                @else
                    <button wire:click.prevent='add()' type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</button>

                    <button wire:click.prevent='cancelModal1()' type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:rired-800">Cancelar</button>
                @endif
            </form>

        </x-slot>
        <x-slot name="footer">
            <h1>Todos direitos Reservados</h1>
        </x-slot>
    </x-jet-dialog-modal>
    <label for="pesquisar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pesquisar
    </label>
    <input wire:model='search' name="pesquisar" type="text" id="pesquisar"
        class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="pesquisar" required="">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Perfil
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Telefone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Delete</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Usuario as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $item->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->perfil }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->telefone }}

                        </td>
                        <td class="px-6 py-4">
                            {{ $item->email }}

                        </td>
                        <td class="px-6 py-4 text-right">
                            <a wire:click.prevent="editar({{ $item->id }})" href="#"
                                class="font-medium bg-blue-600 text-white py-2 px-4 rounded-lg dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a wire:click.prevent="deletar({{ $item->id }})" href="#"
                                class="font-medium bg-red-600 text-white py-2 px-4 rounded-lg dark:text-red-500 hover:underline">Apagar</a>
                        </td>
                    </tr>
                    
                @endforeach


            </tbody>
        </table>
        {{ $Usuario->links() }}
    </div>


</div>
