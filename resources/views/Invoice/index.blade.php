<x-layout>

    <x-slot name="top_bar">
        DashBoard
    </x-slot>

    <x-slot name="content">
        <x-charts :customer_count="$customer_count" :product_count="$product_count" :invoice_count="$invoice_count"/>
   

        {{-- <a href="#" class="btn btn-danger text-white" style="">Primary</a> --}}

        <!-- ============================================================== -->
        <!-- invoice Table -->
            <x-invoice_table :invoices="$invoices">
            </x-invoice_table>
        <!-- end invoice -->
        <!-- ============================================================== -->
                


    </x-slot>


</x-layout>







