<script setup>

    import AuthenticatedLayout from "@/Layouts/AppLayout.vue";

</script>

<template>
  <Head title="Espace Medecin" />

  <AuthenticatedLayout>
    <h1>Dossier Patient</h1><br><br>
    <form>
      <fieldset>
        <legend>Espace médecin traitant</legend>
        <br />
        <textarea name="observation" id="observation">
        Symptômes & Observations</textarea
        ><br /><br />
        <textarea name="diagnostic" id="diagnostic">Diagnostic</textarea
        ><br /><br />
        <textarea name="ordonance" id="ordonance">
        Prescriptions médicales
        </textarea
        ><br /><br />
        <div>
          <label
            for="rdv"
            class="block pl-4 text-base font-semibold text-gray-800"
          >
            Date du prochain rendez-vous
          </label>
          <input type="date" name="rdv" id="rdv" />
        </div>
      </fieldset>
    </form>
  </AuthenticatedLayout>
</template>