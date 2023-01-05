<div class="container card p-3 mb-4">
    <h1 class="text-center mb-4"><span style="border-bottom: 5px solid #234e79;">MOn</span> pannier</h1>
    <div class="row">
        <div class="col-md-6">
            <?php if (isset($_SESSION['pannier'])) : ?>
                <?php foreach ($_SESSION['pannier'] as $key => $pannier) : ($pannier['prix_pro'] > 0) ? $prix = $pannier['prix_pro'] : $prix = $pannier['prix']; ?>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row ">
                            <div class="col-3">
                                <img src="<?= base_url() . '/images/' . $pannier['image'] ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <h5 class="mt-2 text-info">E-commerce</h5>
                                    <h5 class="mt-2" style=""><?= $pannier['titre'] ?></h5>
                                    <h5 class="mt-2" style="">Prix: <?= $prix ?> $</h5>
                                </div>
                            </div>
                            <div class="col-3 text-right">

                                <a href="<?= base_url('pannier/supprimer/') . '/' . $key ?>" class="text-secondary link"><i class="fa-regular fa-2x mt-2 m-3 fa-circle-xmark"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <a href='<?= base_url('/') ?>' class="an-submit_btn btn text-light" style="font-size: 12px;padding: 5px;">Retour</a>
            <?php endif ?>
        </div>
        <div class="col-md-6">
            <div class="card p-4">
                <div class="text-right">
                    <h5 class="">TOTAL</h5>
                </div>
                <div class=' '>
                    <table class="table text-center">
                        <tr class="table-default">
                            <th>Produit</th>
                            <th>Nombre</th>
                            <th>Prix en USD</th>
                        </tr>
                        <?php foreach ($_SESSION['pannier'] as $pannier) : ($pannier['prix_pro'] > 0) ? $prix = $pannier['prix_pro'] : $prix = $pannier['prix']; ?>

                            <tr>
                                <td class="align-middle"><?= $pannier['titre'] ?></td>
                                <td class='align-middle'> x 1</td>
                                <td class="align-middle"><?= $prix ?></td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                    <hr class="hr">
                    <?php $total = 0;
                    foreach ($_SESSION['pannier'] as $key => $pannier) {
                        ($pannier['prix_pro'] > 0) ? $prix = $pannier['prix_pro'] : $prix = $pannier['prix'];
                        if (isset($pannier)) {
                            $total = $total + $prix;
                        }
                    } ?>

                    <div class="text-right">
                        <h5 class="" style="font-weight: bold; font-size: 25px"><?= $total ?> $</h5>
                    </div>
                    <a class="btn-lg btn-outline-info form-control text-center mb-3" id="checkout-button" href="<?= base_url('payer') ?>"><img src="<?= base_url('images/2560px-Stripe_Logo,_revised_2016.svg.png') ?> " class='img img-fluid' style="height: 35px;"></img></a>
                    <div id="paypal-button-container"></div>
                    <!-- Sample PayPal credentials (client-id) are included -->
                    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD&intent=capture&enable-funding=venmo" data-sdk-integration-source="integrationbuilder"></script>
                    <script>
                        const paypalButtonsComponent = paypal.Buttons({
                            // optional styling for buttons
                            // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
                            style: {
                                color: "gold",
                                shape: "rect",
                                layout: "vertical"
                            },

                            // set up the transaction
                            createOrder: (data, actions) => {
                                // pass in any options from the v2 orders create call:
                                // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
                                const createOrderPayload = {
                                    purchase_units: [{
                                        amount: {
                                            value: <?= $total ?>
                                        }
                                    }]
                                };

                                return actions.order.create(createOrderPayload);
                            },

                            // finalize the transaction
                            onApprove: (data, actions) => {
                                const captureOrderHandler = (details) => {
                                    const payerName = details.payer.name.given_name;
                                    console.log('Transaction completed');
                                };

                                return actions.order.capture().then(captureOrderHandler);
                            },

                            // handle unrecoverable errors
                            onError: (err) => {
                                console.error('An error prevented the buyer from checking out with PayPal');
                            }
                        });

                        paypalButtonsComponent
                            .render("#paypal-button-container")
                            .catch((err) => {
                                console.error('PayPal Buttons failed to render');
                            });
                    </script>
                </div>
            </div>
        </div>
    </div>

</div>