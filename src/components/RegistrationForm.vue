<template>
  <div>
    <h1>Registration Form</h1>
    <form @submit.prevent="submitForm">
      <label for="name">Name:</label>
      <input type="text" id="name" v-model="formData.name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" v-model="formData.email" required>

      <!-- Add more form fields for registration data -->
      
      <button type="submit">Register</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      formData: {
        name: '',
        email: '',
        // Add more form fields as needed for registration data
      },
    };
  },
  methods: {
    submitForm() {
      // Handle form submission and registration logic here
      // For example, you can use Firebase to store the registration data
      // this.formData contains the user's input
    },
  },
};
</script>
