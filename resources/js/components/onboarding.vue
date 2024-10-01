<template>
  <div v-if="showOnboarding" class="onboarding-modal">
    <div
      v-for="step in steps"
      :key="step.id"
      class="onboarding-step"
       v-show="currentStep === step.id"
    >
      <h2>{{ step.title }}</h2>
      <img :src="step.image" alt="Onboarding Image" class="onboarding-logo" />
      <p>{{ step.description }}</p>
      <button @click="nextStep" v-if="currentStep < steps.length">Suivant</button>
      <button @click="endOnboarding" v-else>Démarrer</button>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      showOnboarding: true,
      currentStep: 1,
      steps: [], // Contient les données d'onboarding
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
        const response = await axios.get("http://localhost/api/onboard"); // Ajout du protocole
        console.log(response);
        
        this.steps = response.data;
      } catch (error) {
        console.error("Erreur lors de la récupération des étapes:", error);
      }
    },
  },
  mounted() {
    if (localStorage.getItem("onboardingComplete") === "true") {
      this.showOnboarding = false; // Changez à false si l'onboarding est déjà complété
    } else {
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
  background: rgba(0, 0, 0, 0.7);
  display: flex;
  align-items: center;
  justify-content: center;
}

.onboarding-step {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  max-width: 600px;
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

.onboarding-logo {
  width: 150px;
  height: 100px;
}
</style>
