<x-layout>
    <x-slot name="content">
        <x-slot name="top_bar">
            Invoice
        </x-slot>

        <!-- ============================================================== -->
        <!-- create invoice -->

        <x-create_invoice :customers="$customers" :products="$products">
        </x-create_invoice>
        
        <!-- end create invoice -->
        <!-- ============================================================== -->

    </x-slot>


</x-layout>