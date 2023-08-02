<template>
  <div>
    <header>
      <!-- Your header content goes here -->
      <router-link to="/">Home</router-link>
      <router-link to="/about">About</router-link>
      <router-link to="/events">Event List</router-link> <!-- Add a link to the EventList component -->
      <router-link to="/events">Event Details</router-link>
    </header>
    <main>
      <router-view></router-view> <!-- This will render the component based on the active route -->
    </main>
    <footer>
      <!-- Your footer content goes here -->
    </footer>
  </div>
</template>

<script>
export default {
  // Component logic goes here
};
</script>
