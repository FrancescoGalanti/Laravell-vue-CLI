<template>
  <div>
    <h2>Sono App</h2>
    <Card
      v-for="(card, index) in cards" 
      :key="index"
      :title="card.title"
      :content="card.content"
      :img="card.img"
    />
  </div>
</template>

<script>
import Card from "./components/Card";

export default {
  name: "App",
  components: {
    Card
  },
  data() {
    return {
      cards: []
    }
  },
  created() {
    // axios.get('http://127.0.0.1:8000/api/cards').then( function () {
    //   console.log(this);
    // }).catch((err) => {
    //   console.error(err);
    // });

    axios.get('http://127.0.0.1:8000/api/cards').then((result) => {
      console.log(result);
      this.cards = result.data;
      console.log(this.cards);
    }).catch((err) => {
      console.error(err);
    });
  }
}
</script>

<style>

</style>