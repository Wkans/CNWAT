function submitQuiz() {
    let score = 0;

    // Câu 1: chỉ chọn 1
    const q1 = document.querySelector('input[name="q1"]:checked');
    if (q1 && q1.value === "Hà Nội") score++;

    // Câu 2: nhiều đáp án
    const q2 = document.querySelectorAll('input[name="q2"]:checked');
    let q2Answers = [];
    q2.forEach(function (el) {
        q2Answers.push(el.value);
    });

    const correctQ2 = ["Python", "JavaScript", "PHP"];
    let isCorrect = true;

    if (q2Answers.length === correctQ2.length) {
        for (let i = 0; i < q2Answers.length; i++) {
            if (!correctQ2.includes(q2Answers[i])) {
                isCorrect = false;
                break;
            }
        }
    } else {
        isCorrect = false;
    }

    // Nếu đúng hết thì cộng điểm
    if (isCorrect) {
        score++;
    }

    // Câu 3: tự luận
    const q3 = document.getElementById("q3").value.trim().toLowerCase();
    if (q3 === "hypertext markup language") score++;

    // Hiển thị kết quả

    alert("Bạn đạt " + score + "/3 điểm");
}