<x-app-layout>
  <style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100  flex justify-center">
          <form action="{{route('project.store')}}" method="POST">
            @csrf
            <div class="space-y-12 dark:text-white">


              <div class="border-b border-gray-900/10 pb-12 dark:border-gray-700 ">
                <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-white">Informacion del proyecto
                </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-gray-400">Ingrese correctamente la informacion
                  que se solicita</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900  dark:text-white">
                      Nombre del proyecto</label>
                    <div class="mt-2">
                      <input required type="text" name="projectName" id="first-name" autocomplete="given-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="last-name"
                      class="block text-sm font-medium leading-6 text-gray-900  dark:text-white">Fuente de
                      fondos</label>
                    <div class="mt-2">
                      <input required type="text" name="sourceOfFunds" id="last-name" autocomplete="family-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>


                  <div class="sm:col-span-3">
                    <label for="street-address"
                      class="block text-sm font-medium leading-6 text-gray-900  dark:text-white">Monto
                      planificado $</label>
                    <div class="mt-2">
                      <input required type="number" min="0" step=".01" name="plannedAmount" id="street-address"
                        autocomplete="street-address"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="street-address"
                      class="block text-sm font-medium leading-6 text-gray-900  dark:text-white">Monto
                      patrocinado $</label>
                    <div class="mt-2">
                      <input required type="number" min="0" step=".01" name="sponsoredAmount" id="street-address"
                        autocomplete="street-address"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>

                  <div class="sm:col-span-2 sm:col-start-1">
                    <label for="city" class="block text-sm font-medium leading-6 text-gray-900  dark:text-white">Monto
                      fondos propios $</label>
                    <div class="mt-2">
                      <input required type="number" min="0" step=".01" name="amountOwnFunds" id="city"
                        autocomplete="address-level2"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="mt-6 flex items-center justify-end gap-x-6">
              <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


 







</x-app-layout>