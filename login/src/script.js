function handleLogin(event){
    event.preventDefault()

    const username = document.getElementById('input-username').value
    const password = document.getElementById('input-password').value

    console.log(`Username: ${username}`)
    console.log(`Password: ${password}`)

    alert(`Login with: ${username} \n Password: ${password}`)
}

document.getElementById('login-form').addEventListener('submit', handleLogin)