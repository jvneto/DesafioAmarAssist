<style>
    .scrolltable {
        width: 100%;
        overflow-x: hidden;
    }

    @media screen and (max-width: 526px) {
        .scrolltable {
            width: 100%;
            overflow-x: scroll;
        }
    }
</style>
<div class="scrolltable">
    <table class="table">
        <thead class="thead-light bg-white rounded-2">
        <tr>
            {{ $thead }}
        </tr>
        </thead>
        <tbody>
        {{ $tbody }}
        </tbody>
    </table>
</div>
