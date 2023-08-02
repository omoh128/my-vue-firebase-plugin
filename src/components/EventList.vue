<template>
  <div>
    <h1>Event List</h1>
    <ul>
      <li v-for="event in events" :key="event.id">
        <router-link :to="'/events/' + event.id">{{ event.name }}</router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      events: [
        // An array of event objects fetched from Firebase or stored locally
        { id: 1, name: 'Event 1' },
        { id: 2, name: 'Event 2' },
        // Add more events as needed
      ],
    };
  },
};
</script>
