<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{route('project.create')}}">{{ __('crear proyecto') }}</a>
        </h2>
        
    </x-slot> 
      @foreach ($data as $item) 
    <div class="py-1">  
      
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <div>
                            <p>{{$item->projectName}}</p>
                            <p>{{$item->sourceOfFunds}}</p>
                            <p>$ {{$item->plannedAmount}}</p>
                            <p>$ {{$item->sponsoredAmount}}</p>
                            <p>$ {{$item->amountOwnFunds}}</p>
                        </div>
                       <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <a title="Editar rol" href="{{ route('project.edit', $item->id) }}" class="btn btn-warning"><i
                                        class="fas fa-key">Editar</i></a>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <form style="" class="form-delete" action="{{ route('project.delete', $item->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" title="Eliminar rol" class="btn btn-danger"><i
                                            class="fas fa-trash-alt"></i>Eliminar</button>
                                </form>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <a title="Editar rol" href="{{ route('project.report', $item->id) }}" class="btn btn-warning"><i
                                        class="fas fa-key">Reporte</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
  @endforeach



</x-app-layout>