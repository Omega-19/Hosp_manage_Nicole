<script setup>

    import AuthenticatedLayout from '@/Layouts/AppLayout.vue'

</script>

<template>
    <Head title="Index" />

    <AuthenticatedLayout>
        <h1>Tableau de bord</h1>
        <a :href="route('HospManages.create')">Nouveau patient</a>
        <div>

          <table class="table-auto">
            <tr>
              <th>Nom & Prénoms</th>
              <th>Dossier</th>
              <th>Contact</th>
              <th>Action</th>
            </tr>
          
          </table>  

        </div>

    </AuthenticatedLayout>
</template>