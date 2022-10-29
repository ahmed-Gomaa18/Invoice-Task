<x-layout>
    <x-slot name="top_bar">
        Clients
    </x-slot>
    <x-slot name="content">

        <!-- ============================================================== -->
        <!-- Show Customer -->
        
        <x-customer_table :customers="$customers" />
        
        <!-- end Show Customer -->
        <!-- ============================================================== -->

    </x-slot>


</x-layout>