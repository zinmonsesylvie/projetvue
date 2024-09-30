<template>
    <div v-if="showOnboarding" class="onboarding-modal">
      <div class="onboarding-step" v-if="currentStep === 1">
        <h2>Welcome to Sales Management!</h2>
        <p>This application helps you manage your sales efficiently.</p>
        <button @click="nextStep">Next</button>
      </div>

      <div class="onboarding-step" v-if="currentStep === 2">
        <h2>Manage Your Products</h2>
        <p>You can add, edit, and remove products from your inventory.</p>
        <button @click="nextStep">Next</button>
      </div>

      <div class="onboarding-step" v-if="currentStep === 3">
        <h2>Track Sales and Orders</h2>
        <p>Monitor sales transactions and keep track of customer orders in real-time.</p>
        <button @click="nextStep">Next</button>
      </div>

      <div class="onboarding-step" v-if="currentStep === 4">
        <h2>Generate Reports</h2>
        <p>Get detailed sales reports to analyze your performance and make better decisions.</p>
        <button @click="nextStep">Next</button>
      </div>

      <div class="onboarding-step" v-if="currentStep === 5">
        <h2>You're all set!</h2>
        <p>Now you are ready to explore the application. Have a great journey managing your sales!</p>
        <button @click="endOnboarding">Get Started</button>
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
        // Optionally store the onboarding completion in localStorage or backend
        localStorage.setItem('onboardingComplete', 'true');
      },
    },
    mounted() {
      // Check if the user has already completed the onboarding
      if (localStorage.getItem('onboardingComplete') === 'true') {
        this.showOnboarding = false;
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
  </style>
