<script setup>

    import AuthenticatedLayout from '@/Layouts/AppLayout.vue'

</script>

<template>
    <Head title="Planning" />

    <AuthenticatedLayout>
        <h1>Liste du personnel</h1><br><br>
        
        <div>

          <table class="table-auto">
            <tr>
                <th>Jours</th>
                <th>Horaire</th>
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>vendredi</th>
                <th>Samedi</th>
                <th>Dimanche</th>
                <th>Contact d'urgence</th>
                <th>Action</th>
            </tr>
           
          </table>  

        </div>

    </AuthenticatedLayout>
</template>