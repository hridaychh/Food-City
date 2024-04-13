<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Bank Details
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                        <div class="form-group">
                            <label for="cardNumber">
                                ACC NUMBER</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="cardNumber" placeholder="" required autofocus />
                                
                            </div>
                        </div>
                                    
                        <div class="form-group">
                            <label for="cardNumber">
                                IFSC Code</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="cardNumber" placeholder="" required autofocus />
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cardNumber">
                                MICR Code</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="cardNumber" placeholder="" required autofocus />
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cardNumber">
                                Re-enter ACC NUMBER</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="cardNumber" placeholder="" required autofocus />
                                
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <button :disabled="(formattedAmount <= 0)" class="btn btn-success btn-lg btn-block" @click="redeem()" role="button">
                            <i class="fa fa-refresh fa-spin" style="font-size: 24px" v-if="pageProgress"></i>
                                Redeem Rs {{formattedAmount}} /-
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props:['formattedAmount'],
        data() {
            return{
                pageProgress: false
            }
        },
        methods: {
            redeem() {
                this.pageProgress = true;
                axios.post('/passenger/wallet_redeem').then(response =>{
                    this.pageProgress = false;
                    swal({
                        title: "Success",
                        text: "Redeem successfully",
                        icon: "success",
                        buttons: true,
                        dangerMode: true,
                    }).then(() => {
                        location.reload();
                    });
                }).catch((error) => {
                    this.pageProgress = false;
                    console.log(error);
                });   
            }
        }
    }
</script>
