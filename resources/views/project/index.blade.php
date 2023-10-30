<x-app-layout >
    <x-slot name="header">
      <div class="">
       <a class="flex justify-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight w-50"
            href="{{route('project.create')}}"><img src="icons/agregar.png" alt="" class="w-6 mx-1">{{ __('Crear proyecto') }}</a>
    </div>
    </x-slot> 
    <div class="py-6">  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($data->count() > 0)
                    <table class="table-auto w-full text-start ">
                        <thead>
                          <tr>
                            <td>id</td>
                            <td>Nombre Proyecto</td>
                            <td>fuente Fondos</td>
                            <td>Monto Planificado</td>
                            <td>Monto Patrocinado</td>
                            <td>Monto Fondos Propios</td>
                            <td>Acciones</td>
                          </tr>
                        </thead>
                        @foreach ($data as $item) 
                        <tbody>
                          <tr class="mx-8" >
                            <td>{{$item->id}}</td>
                            <td>{{$item->projectName}}</td>
                            <td>{{$item->sourceOfFunds}}</td>
                            <td>$ {{$item->plannedAmount}}</td>
                            <td>$ {{$item->sponsoredAmount}}</td>
                            <td>$ {{$item->amountOwnFunds}}</td>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-2">
                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <a title="Editar rol" href="{{ route('project.edit', $item->id) }}" class="btn btn-warning"><img src="icons/lapiz.png" alt=""></a>
                                    </div>
                                    
                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <a target="_blank" title="Editar rol" href="{{ route('project.report', $item->id) }}" class="btn btn-warning"><img src="icons/impresora.png" alt=""></a>
                                    </div>
                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <form style="" class="form-delete" action="{{ route('project.delete', $item->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" title="Eliminar rol" class="btn btn-danger"><img src="icons/delete.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                          </tr>
                        </tbody>
                         @endforeach
                        
                      </table>
                      
                      <div class=" py-6 "> 
                        <a class="flex justify-start align-center" target="_blank" href="{{ route('project.inform') }}"><img src="icons/pdf3.png" alt="">  <p>Informe</p></a>
                    </div>
                    @else
                      <p>No hay registros</p>
                      @endif 
                </div>
            </div>
        </div>
        
    </div>    
    <div class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
        style="background: rgba(0,0,0,.7);">
        <div
            class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold text-gray-500">Add Task</p>
                    <div class="modal-close cursor-pointer z-50" onclick="modalClose('main-modal')">
                        <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </div>
                </div>
                <!--Body-->
                <div class="my-5 mr-5 ml-5 flex justify-center">
                <form id="add_caretaker_form">
                   <div class="">
            <div class="">
                <label for="names" class="text-md text-gray-600">Title</label>
            </div>
            <div class="">
                <input type="text" id="description" autocomplete="off" name="description"
                    class="h-3 p-6 w-full border-2 mb-5 rounded-md border-gray-300" required >
                <p id="descriptionError" class="text-red-500 hidden">Este campo es obligatorio.</p>
            </div>
        </div>
                
                    </div>
                    <!--Footer-->
                    <div class="flex justify-end pt-2 space-x-14">
                        <button class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold"
                            onclick="modalClose('main-modal')">Cancel</button>
                        <button 
                            class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400"  id="confirmButton">Confirm</button>
                    </div>
                </form>
    
            </div>
        </div>
    </div>
    <div class="another-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
        style="background: rgba(0,0,0,.7);">
        <div
            class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold text-gray-500">Edit Caretaker</p>
                    <div class="modal-close cursor-pointer z-50" onclick="modalClose('another-modal')">
                        <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </div>
                </div>
                <!--Body-->
                <div class="my-5 mr-5 ml-5 flex justify-center">
                    <form action="" method="POST" id="add_caretaker_form" class="w-full">
                        <div class="">
                            <div class="">
                                <label for="names" class="text-md text-gray-600">Full Names</label>
                            </div>
                            <div class="">
                                <input type="text" id="names" autocomplete="off" name="names"
                                    class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md"
                                    placeholder="Example. John Doe">
                            </div>
                            <div class="">
                                <label for="phone" class="text-md text-gray-600">Phone Number</label>
                            </div>
                            <div class="">
                                <input type="text" id="phone" autocomplete="off" name="phone"
                                    class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md"
                                    placeholder="Example. 0729400426">
                            </div>
                            <div class="">
                                <label for="id_number" class="text-md text-gray-600">ID Number</label>
                            </div>
                            <div class="">
                                <input type="number" id="id_number" autocomplete="off" name="id_number"
                                    class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md"
                                    placeholder="Caretaker's ID number">
                            </div>
                        </div>
                    </form>
                </div>
                <!--Footer-->
                <div class="flex justify-end pt-2 space-x-14">
                    <button class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold"
                        onclick="modalClose('another-modal')">Cancel</button>
                    <button class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400"
                        onclick="validate_form(document.getElementById('add_caretaker_form'))">Confirm</button>
                </div>
            </div>
        </div>
    </div>
   
    <script>
        all_modals = ['main-modal', 'another-modal']
        all_modals.forEach((modal) => {
            const modalSelected = document.querySelector('.' + modal);
            modalSelected.classList.remove('fadeIn');
            modalSelected.classList.add('fadeOut');
            modalSelected.style.display = 'none';
        })
      
        const modalClose = (modal) => {
            const modalToClose = document.querySelector('.' + modal);
            modalToClose.classList.remove('fadeIn');
            modalToClose.classList.add('fadeOut');
            setTimeout(() => {
                modalToClose.style.display = 'none';
            }, 500);
            modalToClose.reset()
        }
    
        const openModal = (modal) => {
            console.log(modal);
            const modalToOpen = document.querySelector('.' + modal);
            modalToOpen.classList.remove('fadeOut');
            modalToOpen.classList.add('fadeIn');
            modalToOpen.style.display = 'flex';
        }

      
    
       
      $(document).ready(function() {
    $('.form-delete').submit(function(e){
    e.preventDefault();
    Swal.fire({
    title: 'Quieres eliminar?',
    text: "Se eliminara de forma permanente",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'si deseo eliminar',
    cancelButtonText: 'cancelar'
    }).then((result) => {
    if (result.isConfirmed) {
    this.submit();
    
    
    }
    })
    }) });
    </script>

@if(session('status_success'))
<script>
    Swal.fire(
    'correcto',
    '{{ session('status_success') }}',
    'success'
)
   </script>

@endif


</x-app-layout>
