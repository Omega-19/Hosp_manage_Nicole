<script setup>
    import AuthenticatedLayout from '@/Layouts/AppLayout.vue'
</script>

<template>
  <Head title="create" />

 <AuthenticatedLayout>

    <form action="">
    <div class="shadow overflow-hidden sm:rounded-md">
      <div class="px-4 py-5 bg-white sm:p-6">
        <div class="grid grid-cols-12">
          <div>
            <div >
            <label
              for="jour"
              class="block pl-4 text-base font-semibold text-gray-800"
            >
              Date de la consultation
            </label>
            <input
              type="date"
              name="jour"
              id="jour"
              />
          </div>
          <div >
            <label
              for="hour"
            >
              Heure d'arrivée
            </label>
            <input
              type="time"
              name="hour"
              id="hour"
              />
          </div> <br> <br> <br>
            <fieldset>
              <legend>identification</legend> <br>
              <div class="col-span-4 ml-2 mr-2">
                <label
                  for="firstName"
                  class="block pl-4 text-base font-semibold text-gray-800"
                >
                  Nom
                </label>
                <input
                  type="text"
                  name="firstName"
                  id="firstName"
                  placeholder="Entrer votre nom"
                  class="p-2 mt-1 focus:ring-amber-500 focus:border-amber-500 block w-full shadow-sm rounded-md focus:outline-1 focus:outline-slate-400"
                />
              </div>
              <div class="col-span-4 ml-2 mr-2">
                <label
                  for="lastName"
                  class="block pl-4 text-base font-semibold text-gray-800"
                >
                  Prénom(s)
                </label>
                <input
                  type="texte"
                  name="lastName"
                  id="lastName"
                  placeholder="Entrer votre/vos prénoms"
                  class="p-2 mt-1 focus:ring-amber-500 focus:border-amber-500 block w-full shadow-sm rounded-md focus:outline-1 focus:outline-slate-400"
                />
              </div>
              <div class="col-span-4 ml-2 mr-2">
                <label
                  for="birthday"
                  class="block pl-4 text-base font-semibold text-gray-800"
                >
                  Date de naissance
                </label>
                <input
                  type="date"
                  name="birthday"
                  id="birthday"
                  placeholder="Entrer votre date de naissance"
                  class="p-2 mt-1 focus:ring-amber-500 focus:border-amber-500 block w-full shadow-sm rounded-md focus:outline-1 focus:outline-slate-400"
                />
              </div>
              <div class="col-span-4 ml-2 mr-2">
                <label
                  for="lastName"
                  class="block pl-4 text-base font-semibold text-gray-800"
                >
                  Lieu de naissance
                </label>
                <input
                  type="texte"
                  name="lieu"
                  id="lieu"
                  placeholder="Entrer votre lieu de naissance"
                  class="p-2 mt-1 focus:ring-amber-500 focus:border-amber-500 block w-full shadow-sm rounded-md focus:outline-1 focus:outline-slate-400"
                />
              </div>
              <div class="col-span-4 ml-2 mr-2">
                <h3>Genre</h3>
                <label
                  for="male"
                >
                  Masculin
                </label>
                <input
                  type="radio"
                  name="genre"
                  id="male"
                 /> <br>

                <label
                  for="female"
                >
                  Féminin
                </label>
                <input
                  type="radio"
                  name="genre"
                  id="female"
                 />
              </div>
            </fieldset><br> <br>

            <fieldset>
              <legend>Stéréologie</legend><br>
              <div class="col-span-4 ml-2 mr-2">
                <label
                  for="groupage"
                  class="block pl-4 text-base font-semibold text-gray-800"
                >
                  Groupe sanguin
                </label>
                <select
                  name="groupage"
                  id="groupage"
                  
                >
                  <option  selected disabled> sélectionner un groupe sanguin </option>
                  <option>A+</option>
                  <option>A-</option>
                  <option>B+</option>
                  <option>B-</option>
                  <option>AB+</option>
                  <option>AB-</option>
                  <option>O+</option>
                  <option>O-</option>
                </select>
              </div>
              <div class="col-span-4 ml-2 mr-2">
                <label
                  for="phorèse"
                  class="block pl-4 text-base font-semibold text-gray-800"
                >
                  Electrophorèse
                </label>
                <select
                  name="phorèse"
                  id="phorèse"
                  class="rounded p-2 w-full mt-1"
                >
                    <option  selected disabled> sélectionner un électrophorèse </option>
                    <option>AA</option>
                    <option>AS</option>
                    <option>SS</option>
                </select>
              </div>
            </fieldset><br> <br> 

            <fieldset>
              <legend>constantes</legend><br>
              <div class="col-span-4 ml-2 mr-2">
                <label
                  for="temperature"
                  class="block pl-4 text-base font-semibold text-gray-800"
                >
                  Température
                </label>
                <input
                  type="number"
                  name="temperature"
                  id="temperature"
                  class="p-2 mt-1 focus:ring-amber-500 focus:border-amber-500 block w-full shadow-sm rounded-md focus:outline-1 focus:outline-slate-400"
                />
              </div>
              <div>
                <label
                  for="tension"
                  class="block pl-4 text-base font-semibold text-gray-800"
                >
                  Tension
                </label>
                <input
                  type="number"
                  name="tension"
                  id="tension"
                  class="p-2 mt-1 focus:ring-amber-500 focus:border-amber-500 block w-full shadow-sm rounded-md focus:outline-1 focus:outline-slate-400"
                />
              </div>
              <div>
                <label
                  for="poids"
                  class="block pl-4 text-base font-semibold text-gray-800"
                >
                  Poids
                </label>
                <input
                  type="number"
                  name="poids"
                  id="poids"
                  class="p-2 mt-1 focus:ring-amber-500 focus:border-amber-500 block w-full shadow-sm rounded-md focus:outline-1 focus:outline-slate-400"
                />
              </div>
              <div>
                <label
                  for="taille"
                  class="block pl-4 text-base font-semibold text-gray-800"
                >
                  taille
                </label>
                <input
                  type="number"
                  name="taille"
                  id="taille"
                  class="p-2 mt-1 focus:ring-amber-500 focus:border-amber-500 block w-full shadow-sm rounded-md focus:outline-1 focus:outline-slate-400"
                />
              </div>
            </fieldset><br> <br> 
            <div class="col-span-4 ml-2 mr-2">
              <label
                for="services"
              >
                Services demandés
              </label>
              <select
                name="services"
                id="services"
              >
              <option  selected disabled> sélectionner un service </option>
                <option>Généraliste</option>
                <option>Cardiologie</option>
                <option>Pédiatrie</option>
                <option>Ophtamologie</option>
                <option>ORL</option>
                <option>Gynécologie</option>
                <option>Maternité</option>
                <option>Urgences</option>
              </select>
            </div>

          </div>

          
        </div> <br><br>

        
        <div class="text-right my-2 p-2">
          <button
            type="submit"
            class="inline-flex justify-center py-2 px-4 mx-3 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-emerald-500 hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z"
                clip-rule="evenodd"
              />
            </svg>
            Sauvegarder
          </button>
        </div>
      </div>
    </div>
  </form>

 </AuthenticatedLayout>

</template>