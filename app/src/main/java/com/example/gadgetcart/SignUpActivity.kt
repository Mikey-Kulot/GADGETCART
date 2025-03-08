package com.example.gadgetcart

import android.content.Intent
import android.os.Bundle
import android.text.InputType
import android.text.method.PasswordTransformationMethod
import android.util.Patterns
import android.view.MotionEvent
import android.widget.EditText
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.example.gadgetcart.databinding.SignUpBinding

class SignUpActivity : AppCompatActivity() {
    private lateinit var binding: SignUpBinding
    private var isPasswordVisible = false
    private var isConfirmPasswordVisible = false

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = SignUpBinding.inflate(layoutInflater)
        setContentView(binding.root)

        binding.btnSignUp.setOnClickListener {
            val username = binding.etUsername.text.toString().trim()
            val email = binding.etEmail.text.toString().trim()
            val password = binding.etPassword.text.toString().trim()
            val confirmPassword = binding.etConfirmPassword.text.toString().trim()

            if (validateInputs(username, email, password, confirmPassword)) {
                val intent = Intent(this, MainActivity::class.java)
                intent.putExtra("USERNAME", username)
                startActivity(intent)
            }
        }

        binding.tvSignIn.setOnClickListener {
            startActivity(Intent(this@SignUpActivity, SignInActivity::class.java))
        }

        binding.tvForgotPassword.setOnClickListener {
            startActivity(Intent(this@SignUpActivity, ForgotPasswordActivity::class.java))
        }

        setupPasswordToggle(binding.etPassword) { isPasswordVisible = !isPasswordVisible }
        setupPasswordToggle(binding.etConfirmPassword) { isConfirmPasswordVisible = !isConfirmPasswordVisible }
    }

    private fun validateInputs(username: String, email: String, password: String, confirmPassword: String): Boolean {
        if (username.isEmpty()) {
            showToast("Username is required")
            return false
        }
        if (email.isEmpty() || !Patterns.EMAIL_ADDRESS.matcher(email).matches()) {
            showToast("Enter a valid email address")
            return false
        }
        if (password.isEmpty() || password.length < 6) {
            showToast("Password must contain at least 6 characters")
            return false
        }
        if (confirmPassword.isEmpty() || confirmPassword != password) {
            showToast("Passwords do not match")
            return false
        }
        return true
    }

    private fun showToast(message: String) {
        Toast.makeText(applicationContext, message, Toast.LENGTH_SHORT).show()
    }

    private fun setupPasswordToggle(editText: EditText, toggleState: () -> Unit) {
        editText.setOnTouchListener { _, event ->
            if (event.action == MotionEvent.ACTION_UP) {
                val drawableEnd = editText.compoundDrawablesRelative[2]
                if (drawableEnd != null && event.rawX >= (editText.right - drawableEnd.bounds.width())) {
                    togglePasswordVisibility(editText)
                    toggleState()
                    return@setOnTouchListener true
                }
            }
            false
        }
    }

    private fun togglePasswordVisibility(editText: EditText) {
        if (editText.transformationMethod == null) {
            editText.transformationMethod = PasswordTransformationMethod.getInstance()
            editText.setCompoundDrawablesWithIntrinsicBounds(0, 0, R.drawable.ic_eye_closed, 0)
        } else {
            editText.transformationMethod = null
            editText.setCompoundDrawablesWithIntrinsicBounds(0, 0, R.drawable.ic_eye_open, 0)
        }
        editText.setSelection(editText.text?.length ?: 0)
    }
}
