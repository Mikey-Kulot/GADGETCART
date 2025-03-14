package com.example.gadgetcart

import android.content.Intent
import android.os.Bundle
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.example.gadgetcart.databinding.ActivityOrderTrackingBinding

class OrderTrackingActivity : AppCompatActivity() {

    private lateinit var binding: ActivityOrderTrackingBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        binding = ActivityOrderTrackingBinding.inflate(layoutInflater)
        setContentView(binding.root)

        binding.submitRating.setOnClickListener {
            val rating = binding.ratingBar.rating
            Toast.makeText(this, "You rated: $rating stars", Toast.LENGTH_SHORT).show()
            // Add API call here to submit rating
        }

        binding.markDelivered.setOnClickListener {
            Toast.makeText(this, "Order marked as delivered!", Toast.LENGTH_SHORT).show()
            // Add API call to update order status
        }

        binding.cancelOrder.setOnClickListener {
            Toast.makeText(this, "Order cancelled!", Toast.LENGTH_SHORT).show()
            // Add API call to cancel order
        }

        binding.ibHomeicon.setOnClickListener {
            startActivity(Intent(this, MainActivity::class.java))
            finish()
        }

        binding.ibTracking.setOnClickListener {
            startActivity(Intent(this, OrderTrackingActivity::class.java))
            finish()
        }

        binding.ibProfile.setOnClickListener {
            startActivity(Intent(this, ProfileActivity::class.java))
            finish()
        }
    }
}
