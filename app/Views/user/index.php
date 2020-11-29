<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    .info-panel {
        height: 200px;
        color: black;
        position: relative;
        margin: 20px;
    }
</style>


<div class="container">
    <div class="row space">
        <div class="col-lg-6">
            <h1 class="display-4">Keep your work <span>healthy!</span></h1>
            <?php if (logged_in()) : ?>

            <?php else : ?>
                <a class="btn btn-warning tombol mt-2" href="<?= base_url('/register'); ?>"><b>SIGN UP FOR FREE!</b></a>
            <?php endif; ?>
        </div>
        <div class="col-lg-5">
            <img src="/img/workingspace.jpg" alt="workingspace" class="img-fluid">
        </div>

    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">

        <div type="button" class="col-3 info-panel" data-toggle="modal" data-target="#display" name="display">
            <div class="row">
                <div class="col-lg">
                    <p1> COUNT YOUR DISPLAY </p1>
                </div>
            </div>
        </div>

        <div type="button" class="col-3 info-panel" data-toggle="modal" data-target="#time" name="time">
            <div class="row">
                <div class="col-lg">
                    <p1> COUNT YOUR TIME USAGE </p1>
                </div>
            </div>
        </div>

        <div type="button" class="col-3 info-panel " data-toggle="modal" data-target="#healthy" name="recommendation">
            <div class="row">
                <div class="col-lg ">
                    <p1> HEALTHY RECOMMENDATION </p1>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="healthy" tabindex="-1" role="dialog" aria-labelledby="healthyTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="healthyTitle">Healthy Recommendation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    1. Use A Standing Desk <br>
                    2. Get Up And Move Around Regularly <br>
                    3. Give Your Eyes A Break From Computer <br>
                    4. Keep Healthy Snacks Around Your Desk <br>
                    5. Keep Your Desk Clean <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="display" tabindex="-1" role="dialog" aria-labelledby="displayTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="displayTitle">Display</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    if your monitor's brightness exceed 50, please reduce your monitor's brightness <br>
                    a monitor that is too bright will damage your eyes <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="time" tabindex="-1" role="dialog" aria-labelledby="timeTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="timeTitle">Healty Recommendation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    if you are already using your computer for 2 hour, please have a little rest and do light exercise
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>