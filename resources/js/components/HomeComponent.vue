<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hola estas en el componente Home</div>

                    <div class="card-body">
                        Componente Home !!! {{saludo}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        created: function() {
            this.saludo = "Este es un saludo Especial 1";
        },
        data () {
            return {
                saludo : '',                
            }
        }
    }
</script>
