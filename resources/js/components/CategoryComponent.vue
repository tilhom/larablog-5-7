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
        <button v-show="edit" type="submit" class="btn btn-success">Update Category</button>
      </div>
    </form>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Status</th>
          <th>Created</th>
          <th>Updated</th>
          <th>Operation</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="category in list">
          <td>{{category.id}} </td>
          <td><strong>{{category.name}}</strong></td>
          <td>{{category.status}} </td>
          <td>{{category.created_at}} </td>
          <td>{{category.updated_at}} </td>
          <td><button @click="showCategory(category.id)" class="btn btn-success btn-xs">Edit</button>
            <button @click="deleteCategory(category.id)" class="btn btn-danger btn-xs">Delete</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>

  <script>
    export default {
      data: function(){
        return {
          edit:false,
          list:[],
          category:{
            id:'',
            name:'',
            status:'',
            created_at:'',
            updated_at:'',
          }
        }
      },
      mounted: function(){
        console.log('Category Component Loaded...');
        this.fetchCategoryList();
      },
      methods: {
        fetchCategoryList:function(){
          console.log('Fetching categories...');
          axios.get('/api/categories')
          .then((response) => {
            console.log(response.data);
            this.list = response.data;
          }).catch((error) => {
            console.log(error);
          });
        },
        createCategory: function(){
          console.log('Creating category...');
          let self = this;
          let params = Object.assign({}, self.category);
          axios.post('/api/categories/store', params)
          .then(function(){
            self.category.name = '';
            self.edit = false;
            self.fetchCategoryList();
          })
          .catch(function(error){
            console.log(error);
          });
        },
        showCategory: function(id){
          let self = this;
          axios.get('/api/categories/'+id)
          .then(function(response){
            self.category.id = response.data.id;
            self.category.name = response.data.name;
            self.category.status = response.data.status;
          })
          self.edit = true;
        },

        updateCategory: function(id){
          console.log('Updating category '+id+'...');
          let self = this;
          let params =Object.assign({}, self.category);
          axios.patch('/api/categories/'+id, params)
          .then(function(){
            self.category.name = '';
            self.edit = false;
            self.fetchCategoryList();
          })
          .catch(function(error){
            console.log(error);
          });
        }, // the end of updateCategory
        deleteCategory: function(id){
          if(!confirm("Are you sure delete that?")) return;
          let self = this;
          axios.delete('/api/categories/'+id)
          .then(function(response){
            self.fetchCategoryList();
          })
          .catch(function(error){
            console.log(error);
          });
        }

      }  // the end of methods
    }
  </script>
