<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="w-full max-w-lg" action="{{route('project.store')}}" method="POST">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-white-700 text-xs font-bold mb-2" for="grid-first-name">
                              Nombre del proyecto
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="projectName" id="grid-first-name" type="text" placeholder="Jane">
                            <p class="text-red-500 text-xs italic">Fuente de fondos</p>
                          </div>
                          <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-white-700 text-xs font-bold mb-2" for="grid-last-name">
                             Fuente de fondos
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="sourceOfFunds" id="grid-last-name" type="text" placeholder="Doe">
                          </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class=" w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-white-700 text-xs font-bold mb-2" for="grid-zip">
                                  Monto planificado
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name="plannedAmount" id="grid-zip" type="number" min="0" value="0" step=".01"  placeholder="90210">
                              </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                          <div class=" w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-white-700 text-xs font-bold mb-2" for="grid-zip">
                             Monto patrocinado
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name="sponsoredAmount" id="grid-zip" type="number"  min="0" value="0" step=".01" placeholder="90210">
                          </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class=" w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <label class="block uppercase tracking-wide text-white-700 text-xs font-bold mb-2" for="grid-zip">
                                Monto fondos propios
                              </label>
                              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="amountOwnFunds" id="grid-zip" type="number"  min="0" value="0" step=".01" placeholder="90210">
                            </div>
                          </div>
                          <button type="submit">Guardar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>