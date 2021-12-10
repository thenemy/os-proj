class Player {
    score;
    id_player;
    num_clicks;

    constructor(id_player, score, num_clicks) {
        this.id_player = id_player;
        this.score = score;
        this.num_clicks = num_clicks;
    }

    click(id_player) {
        let num_clicks;
        addEventListener("click", function () {
            num_clicks++;
        });
    }
    id_player = 1;
}
