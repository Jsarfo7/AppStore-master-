<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-xl font-semibold mb-4">App Requests</h2>

                <div class="flex justify-between items-center">
                  
                       
                <button type="submit" class="action-button bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Accept</button>
                    </form>

                   
                        
                        <button type="submit" class="action-button bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Deny</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
