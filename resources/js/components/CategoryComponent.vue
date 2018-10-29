<template>
<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories</h1>
    </div>
    <form action="#" @submit.prevent="edit ? updateCategory(category.id) : createCategory()">
      <div class="form-group">
        <label>Name</label>
        <input v-model="category.name" type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <button v-show="!edit" type="submit" class="btn btn-primary">New Category</button>
        <button v-show="edit" type="submit" class="btn btn-primary">Update Category</button>
    </div>
    </form>
</div>
</template>

<script>
  export default {
    data: function(){
      return {
        edit:true,
        list:[],
        category:{
          id:'',
          name:''
          }
      }
    },
    mounted: function(){
      console.log('Category Component Loaded...');
    },
    methods: {
          createCategory: function(){
            console.log('Creating category...');
            return;
        },
        updateCategory: function(id){
            console.log('Updating category '+id+'...');
            return;
        }
    }
}
</script>
