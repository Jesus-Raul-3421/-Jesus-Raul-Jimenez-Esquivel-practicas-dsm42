<script>

import axios from 'axios';
    export default {
        data(){
            return{
                post:null
            }
        },
        mounted() {
            this.getPost();
            console.log('Component mounted.')
        },
        
        methods:{
            getPost: function (){
                axios.get('api/post').then(response =>{
                    this.post = response.data
                })
            }
        }
    }
</script>
