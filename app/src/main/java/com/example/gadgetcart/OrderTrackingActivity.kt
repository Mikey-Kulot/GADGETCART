package com.example.gadgetcart

import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import com.google.android.material.bottomnavigation.BottomNavigationView
import com.example.gadgetcart.databinding.ActivityOrderTrackingBinding

class OrderTrackingActivity : AppCompatActivity() {

    private lateinit var binding: ActivityOrderTrackingBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityOrderTrackingBinding.inflate(layoutInflater)
        setContentView(binding.root)

        highlightTrackingOrder()

        binding.ibHomeicon.setOnClickListener {
        }

        binding.ibWishlist.setOnClickListener {
        }

        binding.ibProfile.setOnClickListener {
        }

        binding.submitRating.setOnClickListener {
            val rating = binding.ratingBar.rating
        }

        binding.markDelivered.setOnClickListener {
        }

        binding.cancelOrder.setOnClickListener {
        }
    }

    private fun highlightTrackingOrder() {
        binding.ibWishlist.setBackgroundResource(R.drawable.tracking_selected)
    }
}
