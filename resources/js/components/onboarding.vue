<template>
    <div v-if="showOnboarding" class="onboarding-modal">
      <div class="onboarding-step" v-if="currentStep === 1">
        <h2>Bienvenue sur notre application de gestion de ventes!</h2>
        <img :src="'/images/logo.jpg'" alt="Laravel Logo" class="onboarding-logo">
        <p>Cette application vous permet de gérer vos ventes.</p>
        <button @click="nextStep">Suivant</button>
      </div>

      <div class="onboarding-step" v-if="currentStep === 2">
        <h2>Gérer vos produits</h2>
        <img :src="'/images/logo.jpg'" alt="Laravel Logo" class="onboarding-logo">
        <p>Vous pouvez ajouter, modifier et supprimer des produits de votre inventaire.</p>
        <button @click="nextStep">Suivant</button>
      </div>

      <div class="onboarding-step" v-if="currentStep === 3">
        <h2>Suivre les ventes et les commandes.</h2>
        <img :src="'/images/logo.jpg'" alt="Laravel Logo" class="onboarding-logo">
        <p>Surveillez les transactions de vente et suivez les commandes des clients en temps réel.</p>
        <button @click="nextStep">Suivant</button>
      </div>

      <div class="onboarding-step" v-if="currentStep === 4">
        <h2>Générer des rapports.</h2>
        <img :src="'/images/logo.jpg'" alt="Laravel Logo" class="onboarding-logo">
        <p>Obtenez des rapports de vente détaillés pour analyser vos performances et prendre de meilleures décisions.</p>
        <button @click="nextStep">Suivant</button>
      </div>

      <div class="onboarding-step" v-if="currentStep === 5">
        <h2>Vous êtes prêt !</h2>
        <img :src="'/images/logo.jpg'" alt="Laravel Logo" class="onboarding-logo">
        <p>Vous êtes maintenant prêt à explorer l'application. Bonne gestion de vos ventes !</p>
        <button @click="endOnboarding">Démarrer</button>
      </div>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        showOnboarding: true,
        currentStep: 1,
      };
    },
    methods: {
      nextStep() {
        if (this.currentStep < 5) {
          this.currentStep += 1;
        }
      },
      endOnboarding() {
        this.showOnboarding = false;
        localStorage.setItem('onboardingComplete', 'true');
        window.location.href = '/landing';
      },
    },
    mounted() {
      if (localStorage.getItem('onboardingComplete') === 'true') {
        this.showOnboarding = true;
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
