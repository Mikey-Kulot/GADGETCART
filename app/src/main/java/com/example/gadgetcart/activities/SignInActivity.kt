package com.example.gadgetcart.activities

import android.content.Intent
import android.os.Bundle
import android.text.method.PasswordTransformationMethod
import android.view.MotionEvent
import android.widget.EditText
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.example.gadgetcart.ForgotPasswordActivity
import com.example.gadgetcart.R
import com.example.gadgetcart.databinding.SignInBinding
import com.example.gadgetcart.model.ApiResponse
import com.example.gadgetcart.retrofitutil.ApiClient
import com.example.gadgetcart.retrofitutil.ApiInterface
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response

class SignInActivity : AppCompatActivity() {
    private lateinit var binding: SignInBinding
    private var isPasswordVisible = false

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = SignInBinding.inflate(layoutInflater)
        setContentView(binding.root)

        binding.btnSignIn.setOnClickListener {
            val username = binding.etUsername.text.toString().trim()
            val password = binding.etPassword.text.toString().trim()

            if (validateInputs(username, password)) {
                loginUser(username, password)
            }
        }

        binding.tvSignUp.setOnClickListener {
            startActivity(Intent(this@SignInActivity, SignUpActivity::class.java))
        }

        binding.tvForgotPassword.setOnClickListener {
            startActivity(Intent(this@SignInActivity, ForgotPasswordActivity::class.java))
        }

        setupPasswordToggle(binding.etPassword) { isPasswordVisible = !isPasswordVisible }
    }

    private fun loginUser(username: String, password: String) {
        val api = ApiClient.instance.create(ApiInterface::class.java)
        api.performUserLogin(username, password).enqueue(object : Callback<ApiResponse> {
            override fun onResponse(call: Call<ApiResponse>, response: Response<ApiResponse>) {
                if (response.isSuccessful) {
                    val apiResponse = response.body()
                    if (apiResponse != null && apiResponse.resultCode == 1) {
                        Toast.makeText(applicationContext, "Login successful", Toast.LENGTH_SHORT).show()
                        val intent = Intent(applicationContext, MainActivity::class.java)
                        intent.putExtra("USERNAME", apiResponse.username)
                        startActivity(intent)
                        finish()
                    } else {
                        val rawBody = response.raw().body?.string() ?: "No body"
                        showToast("Response: $rawBody - Message: ${apiResponse?.message ?: "Login failed"}")
                    }
                } else {
                    val errorBody = response.errorBody()?.string() ?: response.message()
                    showToast("Server error ${response.code()}: $errorBody")
                }
            }

            override fun onFailure(call: Call<ApiResponse>, t: Throwable) {
                showToast("Network error: ${t.message}")
            }
        })
    }
    private fun validateInputs(username: String, password: String): Boolean {
        if (username.isEmpty()) {
            showToast("Username is required")
            return false
        }
        if (password.isEmpty()) {
            showToast("Password is required")
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