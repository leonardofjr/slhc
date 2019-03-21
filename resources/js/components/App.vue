<template>     
      <div class="row">
          <ul class="nav flex-column">
            <li v-for="item in data" class="nav-item" :key="item">
              <router-link class="nav-link active" :to="'/treatments/' + item.slug">{{item.service_name}}</router-link>
            </li>          
         </ul>
      </div>
</template>

<script>
 export default {
   name: 'App',
   data() {
     return {
        data: [],
     };
   },
  mounted() {
        axios.get(this.web_url + 'services')
        .then(response => {
          this.data = response.data;
        })
        .catch(e => {
              this.errors.push(e)
        });
  },
  methods: {

  }
}
</script>

