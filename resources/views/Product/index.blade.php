<x-layout>
    <x-slot name="top_bar">
        Products
    </x-slot>
    <x-slot name="content">

        <!-- ============================================================== -->
        <!-- Show Customer -->
        
        <x-product_table :products="$products" />
        
        <!-- end Show Customer -->
        <!-- ============================================================== -->

    </x-slot>


</x-layout>