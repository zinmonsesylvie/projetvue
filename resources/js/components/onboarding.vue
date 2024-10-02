<template>
  <div v-if="showOnboarding" class="onboarding-modal">
  <div
    v-for="step in steps"
    :key="step.id"
    class="onboarding-step"
    v-show="currentStep === step.id"
  >
    <h2>{{ step.title }}</h2>
    <img :src="`/storage/${step.image}`" alt="Onboarding Image" class="onboarding-image" />
    <p>{{ step.description }}</p>
    <button @click="nextStep" v-if="currentStep < steps.length">Suivant</button>
    <button @click="endOnboarding" v-else>Démarrer</button>
  </div>
</div>
</template>

<script>
import apiService from '../apiService';

export default {
data() {
  return {
    showOnboarding: true,
    currentStep: 1,
    steps: [],
  };
},
methods: {
  nextStep() {
    if (this.currentStep < this.steps.length) {
      this.currentStep += 1;
    }
  },
  endOnboarding() {
    this.showOnboarding = false;
    localStorage.setItem("onboardingComplete", "true");
    window.location.href = "/landing";
  },
  async fetchOnboardingSteps() {
    try {
      const response = await apiService.get("/onboard");
      console.log(response);

      this.steps = response.data;
    } catch (error) {
      console.error("Erreur lors de la récupération des étapes:", error);
    }
  },
},
mounted() {
  if (localStorage.getItem("onboardingComplete") === "true") {
    this.showOnboarding = true;
    this.fetchOnboardingSteps();
  }
},
};
</script>

<style scoped>
.onboarding-modal {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: white;
display: flex;
align-items: center;
justify-content: center;
}

.onboarding-step {
background: rgb(144, 165, 128);
padding: 2rem;
border-radius: 8px;
width: 400px;
text-align: center;
}
button {
margin-top: 20px;
padding: 10px 20px;
background-color: #3490dc;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
}

button:hover {
background-color: #2779bd;
}


.button-container {
display: flex;
justify-content: space-between; /* Pour espacer les boutons */
margin-top: 20px; /* Espacement en haut si nécessaire */
}

button {
margin: 0 5px; /* Espacement horizontal entre les boutons */
padding: 10px 20px;
background-color: blue;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
}

button:hover {
background-color: black;
}


.onboarding-image {
width: 150px;
height: 150px;
}
</style>
