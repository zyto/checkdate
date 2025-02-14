<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h2 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Введите дату для проверки</h2>
            <p class="col-lg-10 fs-4">Введите <b>существующую</b> дату для проверки в формате dd.mm.yyy</p>
            <p class="col-lg-10 fs-4">Пример корректного ввода: 01.02.2025</p>
            <p class="col-lg-10 fs-4">Пример <b>НЕ</b>корректного ввода: 1.13.2025</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="date" id="floatingInput" placeholder="dd.mm.yyyy">
                    <label for="floatingInput">Дата</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Отправить на проверку</button>
                <hr class="my-4">
                <small class="text-body-secondary">Вы точно ввели дату в правильном формате?</small>

                <?php include "core/code.php" ?>

            </form>
        </div>
    </div>
</div>
