<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('dark-mode-toggle');
    const body = document.body;

    // 检查localStorage中是否有已保存的暗色模式状态
    if (localStorage.getItem('dark-mode') === 'enabled') {
        body.classList.add('dark-mode');
    }

    // 切换暗色模式
    toggleButton.addEventListener('click', function() {
        body.classList.toggle('dark-mode');

        // 保存用户偏好
        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('dark-mode', 'enabled');
        } else {
            localStorage.setItem('dark-mode', 'disabled');
        }
    });
});
</script>
