<script setup>

    import AuthenticatedLayout from '@/Layouts/AppLayout.vue'

</script>

<template>
    <Head title="Personnel" />

    <AuthenticatedLayout>
        <h1>Liste du personnel</h1><br><br>
        
        <div>

          <table class="table-auto">
            <tr>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Fonction</th>
                <th>Email</th>
                <th>Contact d'urgence</th>
                <th>Action</th>
            </tr>
            
          </table>  

        </div>

    </AuthenticatedLayout>
</template>